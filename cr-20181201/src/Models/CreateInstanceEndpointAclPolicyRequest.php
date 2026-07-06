<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;

class CreateInstanceEndpointAclPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $endpointType;

    /**
     * @var AccessControlEntry[]
     */
    public $entries;

    /**
     * @var string
     */
    public $entry;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $moduleName;
    protected $_name = [
        'comment' => 'Comment',
        'endpointType' => 'EndpointType',
        'entries' => 'Entries',
        'entry' => 'Entry',
        'instanceId' => 'InstanceId',
        'moduleName' => 'ModuleName',
    ];

    public function validate()
    {
        if (\is_array($this->entries)) {
            Model::validateArray($this->entries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }

        if (null !== $this->entries) {
            if (\is_array($this->entries)) {
                $res['Entries'] = [];
                $n1 = 0;
                foreach ($this->entries as $item1) {
                    $res['Entries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->entry) {
            $res['Entry'] = $this->entry;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }

        if (isset($map['Entries'])) {
            if (!empty($map['Entries'])) {
                $model->entries = [];
                $n1 = 0;
                foreach ($map['Entries'] as $item1) {
                    $model->entries[$n1] = AccessControlEntry::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Entry'])) {
            $model->entry = $map['Entry'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }

        return $model;
    }
}
