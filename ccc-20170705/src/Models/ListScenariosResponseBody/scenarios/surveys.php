<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListScenariosResponseBody\scenarios;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListScenariosResponseBody\scenarios\surveys\intents;
use AlibabaCloud\Tea\Model;

class surveys extends Model
{
    /**
     * @var int
     */
    public $round;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $beebotId;

    /**
     * @var intents[]
     */
    public $intents;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'round'       => 'Round',
        'description' => 'Description',
        'beebotId'    => 'BeebotId',
        'intents'     => 'Intents',
        'name'        => 'Name',
        'role'        => 'Role',
        'id'          => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->round) {
            $res['Round'] = $this->round;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->beebotId) {
            $res['BeebotId'] = $this->beebotId;
        }
        if (null !== $this->intents) {
            $res['Intents'] = [];
            if (null !== $this->intents && \is_array($this->intents)) {
                $n = 0;
                foreach ($this->intents as $item) {
                    $res['Intents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return surveys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Round'])) {
            $model->round = $map['Round'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['BeebotId'])) {
            $model->beebotId = $map['BeebotId'];
        }
        if (isset($map['Intents'])) {
            if (!empty($map['Intents'])) {
                $model->intents = [];
                $n              = 0;
                foreach ($map['Intents'] as $item) {
                    $model->intents[$n++] = null !== $item ? intents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
