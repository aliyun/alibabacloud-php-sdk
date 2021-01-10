<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListConnectorTriggersResponseBody;

use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListConnectorTriggersResponseBody\triggers\connector;
use AlibabaCloud\Tea\Model;

class triggers extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $visibility;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $documentUrl;

    /**
     * @var connector
     */
    public $connector;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $system;
    protected $_name = [
        'displayName' => 'DisplayName',
        'type'        => 'Type',
        'visibility'  => 'Visibility',
        'description' => 'Description',
        'documentUrl' => 'DocumentUrl',
        'connector'   => 'Connector',
        'name'        => 'Name',
        'system'      => 'System',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->documentUrl) {
            $res['DocumentUrl'] = $this->documentUrl;
        }
        if (null !== $this->connector) {
            $res['Connector'] = null !== $this->connector ? $this->connector->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->system) {
            $res['System'] = $this->system;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return triggers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DocumentUrl'])) {
            $model->documentUrl = $map['DocumentUrl'];
        }
        if (isset($map['Connector'])) {
            $model->connector = connector::fromMap($map['Connector']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['System'])) {
            $model->system = $map['System'];
        }

        return $model;
    }
}
