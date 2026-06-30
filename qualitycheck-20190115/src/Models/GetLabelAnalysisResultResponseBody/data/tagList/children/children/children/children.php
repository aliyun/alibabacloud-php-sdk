<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetLabelAnalysisResultResponseBody\data\tagList\children\children\children;

use AlibabaCloud\Dara\Model;

class children extends Model
{
    /**
     * @var string
     */
    public $remarks;

    /**
     * @var string
     */
    public $tagName;
    protected $_name = [
        'remarks' => 'Remarks',
        'tagName' => 'TagName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->remarks) {
            $res['Remarks'] = $this->remarks;
        }

        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
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
        if (isset($map['Remarks'])) {
            $model->remarks = $map['Remarks'];
        }

        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }

        return $model;
    }
}
