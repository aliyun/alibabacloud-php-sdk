<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;

class AddMembersRequest extends Model
{
    /**
     * @var string[]
     */
    public $memberArns;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'memberArns' => 'memberArns',
        'workspaceId' => 'workspaceId',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        if (\is_array($this->memberArns)) {
            Model::validateArray($this->memberArns);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memberArns) {
            if (\is_array($this->memberArns)) {
                $res['memberArns'] = [];
                $n1 = 0;
                foreach ($this->memberArns as $item1) {
                    $res['memberArns'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
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
        if (isset($map['memberArns'])) {
            if (!empty($map['memberArns'])) {
                $model->memberArns = [];
                $n1 = 0;
                foreach ($map['memberArns'] as $item1) {
                    $model->memberArns[$n1++] = $item1;
                }
            }
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
