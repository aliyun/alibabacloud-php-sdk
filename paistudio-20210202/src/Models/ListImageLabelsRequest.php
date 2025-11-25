<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Dara\Model;

class ListImageLabelsRequest extends Model
{
    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $labelFilter;

    /**
     * @var string
     */
    public $labelKeys;
    protected $_name = [
        'imageId' => 'ImageId',
        'labelFilter' => 'LabelFilter',
        'labelKeys' => 'LabelKeys',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->labelFilter) {
            $res['LabelFilter'] = $this->labelFilter;
        }

        if (null !== $this->labelKeys) {
            $res['LabelKeys'] = $this->labelKeys;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['LabelFilter'])) {
            $model->labelFilter = $map['LabelFilter'];
        }

        if (isset($map['LabelKeys'])) {
            $model->labelKeys = $map['LabelKeys'];
        }

        return $model;
    }
}
