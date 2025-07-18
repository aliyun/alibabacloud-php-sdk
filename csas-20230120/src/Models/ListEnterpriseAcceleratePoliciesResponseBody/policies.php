<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListEnterpriseAcceleratePoliciesResponseBody;

use AlibabaCloud\Tea\Model;

class policies extends Model
{
    /**
     * @example whitelist
     *
     * @var string
     */
    public $accelerationType;

    /**
     * @var string
     */
    public $description;

    /**
     * @example eap-eec34d4b12fcca61
     *
     * @var string
     */
    public $eapId;

    /**
     * @example 0
     *
     * @var int
     */
    public $enabled;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example 0
     *
     * @var int
     */
    public $onTls;

    /**
     * @example 99
     *
     * @var int
     */
    public $priority;

    /**
     * @example 1
     *
     * @var int
     */
    public $showInClient;

    /**
     * @example 12.34.56.XX
     *
     * @var string
     */
    public $upstreamHost;

    /**
     * @example 1000
     *
     * @var int
     */
    public $upstreamPort;

    /**
     * @example connector
     *
     * @var string
     */
    public $upstreamType;

    /**
     * @var string
     */
    public $userAttributeGroup;
    protected $_name = [
        'accelerationType' => 'AccelerationType',
        'description' => 'Description',
        'eapId' => 'EapId',
        'enabled' => 'Enabled',
        'name' => 'Name',
        'onTls' => 'OnTls',
        'priority' => 'Priority',
        'showInClient' => 'ShowInClient',
        'upstreamHost' => 'UpstreamHost',
        'upstreamPort' => 'UpstreamPort',
        'upstreamType' => 'UpstreamType',
        'userAttributeGroup' => 'UserAttributeGroup',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accelerationType) {
            $res['AccelerationType'] = $this->accelerationType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->eapId) {
            $res['EapId'] = $this->eapId;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->onTls) {
            $res['OnTls'] = $this->onTls;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->showInClient) {
            $res['ShowInClient'] = $this->showInClient;
        }
        if (null !== $this->upstreamHost) {
            $res['UpstreamHost'] = $this->upstreamHost;
        }
        if (null !== $this->upstreamPort) {
            $res['UpstreamPort'] = $this->upstreamPort;
        }
        if (null !== $this->upstreamType) {
            $res['UpstreamType'] = $this->upstreamType;
        }
        if (null !== $this->userAttributeGroup) {
            $res['UserAttributeGroup'] = $this->userAttributeGroup;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccelerationType'])) {
            $model->accelerationType = $map['AccelerationType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EapId'])) {
            $model->eapId = $map['EapId'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OnTls'])) {
            $model->onTls = $map['OnTls'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ShowInClient'])) {
            $model->showInClient = $map['ShowInClient'];
        }
        if (isset($map['UpstreamHost'])) {
            $model->upstreamHost = $map['UpstreamHost'];
        }
        if (isset($map['UpstreamPort'])) {
            $model->upstreamPort = $map['UpstreamPort'];
        }
        if (isset($map['UpstreamType'])) {
            $model->upstreamType = $map['UpstreamType'];
        }
        if (isset($map['UserAttributeGroup'])) {
            $model->userAttributeGroup = $map['UserAttributeGroup'];
        }

        return $model;
    }
}
