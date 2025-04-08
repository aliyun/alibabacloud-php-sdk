<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class CompareSimilarByImageAdvanceRequest extends Model
{
    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var Stream
     */
    public $primaryPicContentObject;

    /**
     * @var Stream
     */
    public $secondaryPicContentObject;
    protected $_name = [
        'instanceName' => 'InstanceName',
        'primaryPicContentObject' => 'PrimaryPicContent',
        'secondaryPicContentObject' => 'SecondaryPicContent',
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

        if (null !== $this->primaryPicContentObject) {
            $res['PrimaryPicContent'] = $this->primaryPicContentObject;
        }

        if (null !== $this->secondaryPicContentObject) {
            $res['SecondaryPicContent'] = $this->secondaryPicContentObject;
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
            $model->primaryPicContentObject = $map['PrimaryPicContent'];
        }

        if (isset($map['SecondaryPicContent'])) {
            $model->secondaryPicContentObject = $map['SecondaryPicContent'];
        }

        return $model;
    }
}
