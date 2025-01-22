<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class UpdateProjectRequest extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $devEnvironmentEnabled;
    /**
     * @var bool
     */
    public $devRoleDisabled;
    /**
     * @var string
     */
    public $displayName;
    /**
     * @var int
     */
    public $id;
    /**
     * @var bool
     */
    public $paiTaskEnabled;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'description'           => 'Description',
        'devEnvironmentEnabled' => 'DevEnvironmentEnabled',
        'devRoleDisabled'       => 'DevRoleDisabled',
        'displayName'           => 'DisplayName',
        'id'                    => 'Id',
        'paiTaskEnabled'        => 'PaiTaskEnabled',
        'status'                => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->devEnvironmentEnabled) {
            $res['DevEnvironmentEnabled'] = $this->devEnvironmentEnabled;
        }

        if (null !== $this->devRoleDisabled) {
            $res['DevRoleDisabled'] = $this->devRoleDisabled;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->paiTaskEnabled) {
            $res['PaiTaskEnabled'] = $this->paiTaskEnabled;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DevEnvironmentEnabled'])) {
            $model->devEnvironmentEnabled = $map['DevEnvironmentEnabled'];
        }

        if (isset($map['DevRoleDisabled'])) {
            $model->devRoleDisabled = $map['DevRoleDisabled'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['PaiTaskEnabled'])) {
            $model->paiTaskEnabled = $map['PaiTaskEnabled'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
