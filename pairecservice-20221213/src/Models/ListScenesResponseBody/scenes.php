<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListScenesResponseBody;

use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListScenesResponseBody\scenes\flows;
use AlibabaCloud\Tea\Model;

class scenes extends Model
{
    /**
     * @example This is a test.
     *
     * @var string
     */
    public $description;

    /**
     * @var flows[]
     */
    public $flows;

    /**
     * @example scene1
     *
     * @var string
     */
    public $name;

    /**
     * @example 3
     *
     * @var string
     */
    public $sceneId;
    protected $_name = [
        'description' => 'Description',
        'flows'       => 'Flows',
        'name'        => 'Name',
        'sceneId'     => 'SceneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->flows) {
            $res['Flows'] = [];
            if (null !== $this->flows && \is_array($this->flows)) {
                $n = 0;
                foreach ($this->flows as $item) {
                    $res['Flows'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scenes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Flows'])) {
            if (!empty($map['Flows'])) {
                $model->flows = [];
                $n            = 0;
                foreach ($map['Flows'] as $item) {
                    $model->flows[$n++] = null !== $item ? flows::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        return $model;
    }
}
