<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models;

use AlibabaCloud\Dara\Model;

class ListScriptsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var bool
     */
    public $publishOnly;

    /**
     * @var string[]
     */
    public $scriptIds;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'publishOnly' => 'PublishOnly',
        'scriptIds' => 'ScriptIds',
    ];

    public function validate()
    {
        if (\is_array($this->scriptIds)) {
            Model::validateArray($this->scriptIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->publishOnly) {
            $res['PublishOnly'] = $this->publishOnly;
        }

        if (null !== $this->scriptIds) {
            if (\is_array($this->scriptIds)) {
                $res['ScriptIds'] = [];
                $n1 = 0;
                foreach ($this->scriptIds as $item1) {
                    $res['ScriptIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PublishOnly'])) {
            $model->publishOnly = $map['PublishOnly'];
        }

        if (isset($map['ScriptIds'])) {
            if (!empty($map['ScriptIds'])) {
                $model->scriptIds = [];
                $n1 = 0;
                foreach ($map['ScriptIds'] as $item1) {
                    $model->scriptIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
