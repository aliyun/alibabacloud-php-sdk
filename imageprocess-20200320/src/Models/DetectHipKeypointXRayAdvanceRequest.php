<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class DetectHipKeypointXRayAdvanceRequest extends Model
{
    /**
     * @var string
     */
    public $dataFormat;

    /**
     * @var Stream
     */
    public $imageUrlObject;

    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $orgName;

    /**
     * @var string
     */
    public $tracerId;
    protected $_name = [
        'dataFormat'     => 'DataFormat',
        'imageUrlObject' => 'ImageUrl',
        'orgId'          => 'OrgId',
        'orgName'        => 'OrgName',
        'tracerId'       => 'TracerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataFormat) {
            $res['DataFormat'] = $this->dataFormat;
        }
        if (null !== $this->imageUrlObject) {
            $res['ImageUrl'] = $this->imageUrlObject;
        }
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }
        if (null !== $this->tracerId) {
            $res['TracerId'] = $this->tracerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectHipKeypointXRayAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataFormat'])) {
            $model->dataFormat = $map['DataFormat'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrlObject = $map['ImageUrl'];
        }
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }
        if (isset($map['TracerId'])) {
            $model->tracerId = $map['TracerId'];
        }

        return $model;
    }
}
