<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectBuildContextResponseBody\projectBuild;

use AlibabaCloud\Dara\Model;

class resourceList extends Model
{
    /**
     * @var string[]
     */
    public $info;

    /**
     * @var int
     */
    public $resourceCnt;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'info' => 'info',
        'resourceCnt' => 'resourceCnt',
        'resourceType' => 'resourceType',
    ];

    public function validate()
    {
        if (\is_array($this->info)) {
            Model::validateArray($this->info);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->info) {
            if (\is_array($this->info)) {
                $res['info'] = [];
                foreach ($this->info as $key1 => $value1) {
                    $res['info'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->resourceCnt) {
            $res['resourceCnt'] = $this->resourceCnt;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
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
        if (isset($map['info'])) {
            if (!empty($map['info'])) {
                $model->info = [];
                foreach ($map['info'] as $key1 => $value1) {
                    $model->info[$key1] = $value1;
                }
            }
        }

        if (isset($map['resourceCnt'])) {
            $model->resourceCnt = $map['resourceCnt'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}
