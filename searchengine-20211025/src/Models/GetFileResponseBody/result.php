<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetFileResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $dataSource;

    /**
     * @var string[][]
     */
    public $extend;

    /**
     * @var string
     */
    public $fullPathName;

    /**
     * @var bool
     */
    public $isDir;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $partition;
    protected $_name = [
        'content' => 'content',
        'dataSource' => 'dataSource',
        'extend' => 'extend',
        'fullPathName' => 'fullPathName',
        'isDir' => 'isDir',
        'name' => 'name',
        'partition' => 'partition',
    ];

    public function validate()
    {
        if (\is_array($this->extend)) {
            Model::validateArray($this->extend);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->dataSource) {
            $res['dataSource'] = $this->dataSource;
        }

        if (null !== $this->extend) {
            if (\is_array($this->extend)) {
                $res['extend'] = [];
                foreach ($this->extend as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['extend'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['extend'][$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (null !== $this->fullPathName) {
            $res['fullPathName'] = $this->fullPathName;
        }

        if (null !== $this->isDir) {
            $res['isDir'] = $this->isDir;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->partition) {
            $res['partition'] = $this->partition;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['dataSource'])) {
            $model->dataSource = $map['dataSource'];
        }

        if (isset($map['extend'])) {
            if (!empty($map['extend'])) {
                $model->extend = [];
                foreach ($map['extend'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->extend[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->extend[$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (isset($map['fullPathName'])) {
            $model->fullPathName = $map['fullPathName'];
        }

        if (isset($map['isDir'])) {
            $model->isDir = $map['isDir'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['partition'])) {
            $model->partition = $map['partition'];
        }

        return $model;
    }
}
