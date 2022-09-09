<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\SDK\IaCService\V20210806\Models\ListRelationModulesResponseBody\modules;
use AlibabaCloud\Tea\Model;

class ListRelationModulesResponseBody extends Model
{
    /**
     * @var modules[]
     */
    public $modules;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'modules'    => 'modules',
        'requestId'  => 'requestId',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modules) {
            $res['modules'] = [];
            if (null !== $this->modules && \is_array($this->modules)) {
                $n = 0;
                foreach ($this->modules as $item) {
                    $res['modules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRelationModulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['modules'])) {
            if (!empty($map['modules'])) {
                $model->modules = [];
                $n              = 0;
                foreach ($map['modules'] as $item) {
                    $model->modules[$n++] = null !== $item ? modules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
