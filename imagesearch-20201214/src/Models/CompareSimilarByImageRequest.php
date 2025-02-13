<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models;

use AlibabaCloud\Dara\Model;

class CompareSimilarByImageRequest extends Model
{
    /**
     * @var string
     */
    public $instanceName;
    /**
     * @var string
     */
    public $primaryPicContent;
    /**
     * @var string
     */
    public $secondaryPicContent;
    protected $_name = [
        'instanceName'        => 'InstanceName',
        'primaryPicContent'   => 'PrimaryPicContent',
        'secondaryPicContent' => 'SecondaryPicContent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->primaryPicContent) {
            $res['PrimaryPicContent'] = $this->primaryPicContent;
        }

        if (null !== $this->secondaryPicContent) {
            $res['SecondaryPicContent'] = $this->secondaryPicContent;
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
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['PrimaryPicContent'])) {
            $model->primaryPicContent = $map['PrimaryPicContent'];
        }

        if (isset($map['SecondaryPicContent'])) {
            $model->secondaryPicContent = $map['SecondaryPicContent'];
        }

        return $model;
    }
}
