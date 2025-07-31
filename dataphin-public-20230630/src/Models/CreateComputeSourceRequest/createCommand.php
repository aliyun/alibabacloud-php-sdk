<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateComputeSourceRequest;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateComputeSourceRequest\createCommand\configList;
use AlibabaCloud\Tea\Model;

class createCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var configList[]
     */
    public $configList;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example test1011
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example MacCompute
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'configList' => 'ConfigList',
        'description' => 'Description',
        'name' => 'Name',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configList) {
            $res['ConfigList'] = [];
            if (null !== $this->configList && \is_array($this->configList)) {
                $n = 0;
                foreach ($this->configList as $item) {
                    $res['ConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return createCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigList'])) {
            if (!empty($map['ConfigList'])) {
                $model->configList = [];
                $n = 0;
                foreach ($map['ConfigList'] as $item) {
                    $model->configList[$n++] = null !== $item ? configList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
