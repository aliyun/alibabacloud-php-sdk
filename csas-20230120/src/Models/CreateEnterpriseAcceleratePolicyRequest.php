<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class CreateEnterpriseAcceleratePolicyRequest extends Model
{
    /**
     * @var string
     */
    public $accelerationType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var int
     */
    public $showInClient;

    /**
     * @var string
     */
    public $upstreamHost;

    /**
     * @var int
     */
    public $upstreamPort;

    /**
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
        'name' => 'Name',
        'priority' => 'Priority',
        'showInClient' => 'ShowInClient',
        'upstreamHost' => 'UpstreamHost',
        'upstreamPort' => 'UpstreamPort',
        'upstreamType' => 'UpstreamType',
        'userAttributeGroup' => 'UserAttributeGroup',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accelerationType) {
            $res['AccelerationType'] = $this->accelerationType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccelerationType'])) {
            $model->accelerationType = $map['AccelerationType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
