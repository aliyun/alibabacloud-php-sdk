<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCustomBlockInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class instanceList extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $aliNetOnline;

    /**
     * @example group
     *
     * @var string
     */
    public $blockType;

    /**
     * @example AliNetNotOnline
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example myInstance
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example 116.62.121.1xx
     *
     * @var string
     */
    public $internetIp;

    /**
     * @example 192.168.1.xx
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example {"aliUid":*******,"groupId":"sg-xxxx","groupName":"Sas_Malicious_Ip_Security_Group","groupType":"normal","instanceId":"i-xxxx","regionId":"cn-shenzhen","vpcId":"vpc-xxxxxxxx"}
     *
     * @var string
     */
    public $successInfo;

    /**
     * @example f2d6e901-1004-4ca8-9dae-53ec04a9****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'aliNetOnline' => 'AliNetOnline',
        'blockType'    => 'BlockType',
        'errorCode'    => 'ErrorCode',
        'instanceName' => 'InstanceName',
        'internetIp'   => 'InternetIp',
        'intranetIp'   => 'IntranetIp',
        'status'       => 'Status',
        'successInfo'  => 'SuccessInfo',
        'uuid'         => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliNetOnline) {
            $res['AliNetOnline'] = $this->aliNetOnline;
        }
        if (null !== $this->blockType) {
            $res['BlockType'] = $this->blockType;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->successInfo) {
            $res['SuccessInfo'] = $this->successInfo;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliNetOnline'])) {
            $model->aliNetOnline = $map['AliNetOnline'];
        }
        if (isset($map['BlockType'])) {
            $model->blockType = $map['BlockType'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SuccessInfo'])) {
            $model->successInfo = $map['SuccessInfo'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
