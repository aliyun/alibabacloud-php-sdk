<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListAllReleaseWorkflowsResponse\body\releaseStages;

use AlibabaCloud\Tea\Model;

class variableGroups extends Model
{
    /**
     * @example dev
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @example APP
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'name'        => 'name',
        'displayName' => 'displayName',
        'type'        => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return variableGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
