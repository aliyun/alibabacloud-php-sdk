<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListContactGroupsResponseBody;

use AlibabaCloud\Dara\Model;

class contactGroups extends Model
{
    /**
     * @var string
     */
    public $contactGroupId;

    /**
     * @var string[]
     */
    public $contactIds;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'contactGroupId' => 'contactGroupId',
        'contactIds' => 'contactIds',
        'name' => 'name',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (\is_array($this->contactIds)) {
            Model::validateArray($this->contactIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactGroupId) {
            $res['contactGroupId'] = $this->contactGroupId;
        }

        if (null !== $this->contactIds) {
            if (\is_array($this->contactIds)) {
                $res['contactIds'] = [];
                $n1 = 0;
                foreach ($this->contactIds as $item1) {
                    $res['contactIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['contactGroupId'])) {
            $model->contactGroupId = $map['contactGroupId'];
        }

        if (isset($map['contactIds'])) {
            if (!empty($map['contactIds'])) {
                $model->contactIds = [];
                $n1 = 0;
                foreach ($map['contactIds'] as $item1) {
                    $model->contactIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
