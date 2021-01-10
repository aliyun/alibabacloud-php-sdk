<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeConnectorAttributeResponseBody\capabilities;

use AlibabaCloud\Tea\Model;

class actions extends Model
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
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $system;

    /**
     * @var string
     */
    public $defaultActionName;
    protected $_name = [
        'displayName'       => 'DisplayName',
        'type'              => 'Type',
        'visibility'        => 'Visibility',
        'description'       => 'Description',
        'documentUrl'       => 'DocumentUrl',
        'name'              => 'Name',
        'system'            => 'System',
        'defaultActionName' => 'DefaultActionName',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->system) {
            $res['System'] = $this->system;
        }
        if (null !== $this->defaultActionName) {
            $res['DefaultActionName'] = $this->defaultActionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return actions
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['System'])) {
            $model->system = $map['System'];
        }
        if (isset($map['DefaultActionName'])) {
            $model->defaultActionName = $map['DefaultActionName'];
        }

        return $model;
    }
}
