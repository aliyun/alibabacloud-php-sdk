<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifyACLRuleResponseBody\dpiGroupIds;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ModifyACLRuleResponseBody\dpiSignatureIds;

class ModifyACLRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $aclId;

    /**
     * @var string
     */
    public $acrId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $destCidr;

    /**
     * @var string
     */
    public $destPortRange;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var dpiGroupIds
     */
    public $dpiGroupIds;

    /**
     * @var dpiSignatureIds
     */
    public $dpiSignatureIds;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $ipProtocol;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sourceCidr;

    /**
     * @var string
     */
    public $sourcePortRange;
    protected $_name = [
        'aclId' => 'AclId',
        'acrId' => 'AcrId',
        'description' => 'Description',
        'destCidr' => 'DestCidr',
        'destPortRange' => 'DestPortRange',
        'direction' => 'Direction',
        'dpiGroupIds' => 'DpiGroupIds',
        'dpiSignatureIds' => 'DpiSignatureIds',
        'gmtCreate' => 'GmtCreate',
        'ipProtocol' => 'IpProtocol',
        'name' => 'Name',
        'policy' => 'Policy',
        'priority' => 'Priority',
        'requestId' => 'RequestId',
        'sourceCidr' => 'SourceCidr',
        'sourcePortRange' => 'SourcePortRange',
    ];

    public function validate()
    {
        if (null !== $this->dpiGroupIds) {
            $this->dpiGroupIds->validate();
        }
        if (null !== $this->dpiSignatureIds) {
            $this->dpiSignatureIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }

        if (null !== $this->acrId) {
            $res['AcrId'] = $this->acrId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->destCidr) {
            $res['DestCidr'] = $this->destCidr;
        }

        if (null !== $this->destPortRange) {
            $res['DestPortRange'] = $this->destPortRange;
        }

        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->dpiGroupIds) {
            $res['DpiGroupIds'] = null !== $this->dpiGroupIds ? $this->dpiGroupIds->toArray($noStream) : $this->dpiGroupIds;
        }

        if (null !== $this->dpiSignatureIds) {
            $res['DpiSignatureIds'] = null !== $this->dpiSignatureIds ? $this->dpiSignatureIds->toArray($noStream) : $this->dpiSignatureIds;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sourceCidr) {
            $res['SourceCidr'] = $this->sourceCidr;
        }

        if (null !== $this->sourcePortRange) {
            $res['SourcePortRange'] = $this->sourcePortRange;
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
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }

        if (isset($map['AcrId'])) {
            $model->acrId = $map['AcrId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DestCidr'])) {
            $model->destCidr = $map['DestCidr'];
        }

        if (isset($map['DestPortRange'])) {
            $model->destPortRange = $map['DestPortRange'];
        }

        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['DpiGroupIds'])) {
            $model->dpiGroupIds = dpiGroupIds::fromMap($map['DpiGroupIds']);
        }

        if (isset($map['DpiSignatureIds'])) {
            $model->dpiSignatureIds = dpiSignatureIds::fromMap($map['DpiSignatureIds']);
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SourceCidr'])) {
            $model->sourceCidr = $map['SourceCidr'];
        }

        if (isset($map['SourcePortRange'])) {
            $model->sourcePortRange = $map['SourcePortRange'];
        }

        return $model;
    }
}
