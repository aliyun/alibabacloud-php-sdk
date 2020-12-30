<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\AddACLRuleResponseBody\dpiGroupIds;
use AlibabaCloud\SDK\Smartag\V20180313\Models\AddACLRuleResponseBody\dpiSignatureIds;
use AlibabaCloud\Tea\Model;

class AddACLRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $policy;

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
    public $sourcePortRange;

    /**
     * @var string
     */
    public $sourceCidr;

    /**
     * @var int
     */
    public $priority;

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
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $destCidr;

    /**
     * @var dpiSignatureIds
     */
    public $dpiSignatureIds;

    /**
     * @var string
     */
    public $ipProtocol;
    protected $_name = [
        'policy'          => 'Policy',
        'description'     => 'Description',
        'requestId'       => 'RequestId',
        'sourcePortRange' => 'SourcePortRange',
        'sourceCidr'      => 'SourceCidr',
        'priority'        => 'Priority',
        'aclId'           => 'AclId',
        'acrId'           => 'AcrId',
        'destPortRange'   => 'DestPortRange',
        'direction'       => 'Direction',
        'dpiGroupIds'     => 'DpiGroupIds',
        'name'            => 'Name',
        'type'            => 'Type',
        'gmtCreate'       => 'GmtCreate',
        'destCidr'        => 'DestCidr',
        'dpiSignatureIds' => 'DpiSignatureIds',
        'ipProtocol'      => 'IpProtocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sourcePortRange) {
            $res['SourcePortRange'] = $this->sourcePortRange;
        }
        if (null !== $this->sourceCidr) {
            $res['SourceCidr'] = $this->sourceCidr;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->acrId) {
            $res['AcrId'] = $this->acrId;
        }
        if (null !== $this->destPortRange) {
            $res['DestPortRange'] = $this->destPortRange;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->dpiGroupIds) {
            $res['DpiGroupIds'] = null !== $this->dpiGroupIds ? $this->dpiGroupIds->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->destCidr) {
            $res['DestCidr'] = $this->destCidr;
        }
        if (null !== $this->dpiSignatureIds) {
            $res['DpiSignatureIds'] = null !== $this->dpiSignatureIds ? $this->dpiSignatureIds->toMap() : null;
        }
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddACLRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SourcePortRange'])) {
            $model->sourcePortRange = $map['SourcePortRange'];
        }
        if (isset($map['SourceCidr'])) {
            $model->sourceCidr = $map['SourceCidr'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['AcrId'])) {
            $model->acrId = $map['AcrId'];
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['DestCidr'])) {
            $model->destCidr = $map['DestCidr'];
        }
        if (isset($map['DpiSignatureIds'])) {
            $model->dpiSignatureIds = dpiSignatureIds::fromMap($map['DpiSignatureIds']);
        }
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }

        return $model;
    }
}
