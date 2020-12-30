<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class CreateCloudConnectNetworkResponseBody extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $ccnId;

    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var string
     */
    public $snatCidrBlock;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'status'        => 'Status',
        'description'   => 'Description',
        'requestId'     => 'RequestId',
        'ccnId'         => 'CcnId',
        'cidrBlock'     => 'CidrBlock',
        'snatCidrBlock' => 'SnatCidrBlock',
        'name'          => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ccnId) {
            $res['CcnId'] = $this->ccnId;
        }
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->snatCidrBlock) {
            $res['SnatCidrBlock'] = $this->snatCidrBlock;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCloudConnectNetworkResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CcnId'])) {
            $model->ccnId = $map['CcnId'];
        }
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['SnatCidrBlock'])) {
            $model->snatCidrBlock = $map['SnatCidrBlock'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
