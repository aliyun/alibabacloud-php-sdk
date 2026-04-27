<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUserResponseBody\user;

use AlibabaCloud\Dara\Model;

class externalInfo extends Model
{
    /**
     * @var string
     */
    public $externalId;

    /**
     * @var string
     */
    public $externalName;

    /**
     * @var string
     */
    public $jobNumber;

    /**
     * @var string
     */
    public $ssoType;
    protected $_name = [
        'externalId' => 'ExternalId',
        'externalName' => 'ExternalName',
        'jobNumber' => 'JobNumber',
        'ssoType' => 'SsoType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->externalId) {
            $res['ExternalId'] = $this->externalId;
        }

        if (null !== $this->externalName) {
            $res['ExternalName'] = $this->externalName;
        }

        if (null !== $this->jobNumber) {
            $res['JobNumber'] = $this->jobNumber;
        }

        if (null !== $this->ssoType) {
            $res['SsoType'] = $this->ssoType;
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
        if (isset($map['ExternalId'])) {
            $model->externalId = $map['ExternalId'];
        }

        if (isset($map['ExternalName'])) {
            $model->externalName = $map['ExternalName'];
        }

        if (isset($map['JobNumber'])) {
            $model->jobNumber = $map['JobNumber'];
        }

        if (isset($map['SsoType'])) {
            $model->ssoType = $map['SsoType'];
        }

        return $model;
    }
}
