<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetFileResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The content of the file.
     *
     * @example None
     *
     * @var string
     */
    public $content;

    /**
     * @description The data source.
     *
     * @example ha-cn-2r42p5oi202_xijie_test
     *
     * @var string
     */
    public $dataSource;

    /**
     * @description The name of the full path.
     *
     * @example ""
     *
     * @var string
     */
    public $fullPathName;

    /**
     * @description Indicates whether it is a directory.
     *
     * @example True
     *
     * @var bool
     */
    public $isDir;

    /**
     * @description The name of the file.
     *
     * @example ha-cn-2r42ostoc01_qrs
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of shards.
     *
     * @example ds=20210828
     *
     * @var int
     */
    public $partition;
    protected $_name = [
        'content'      => 'content',
        'dataSource'   => 'dataSource',
        'fullPathName' => 'fullPathName',
        'isDir'        => 'isDir',
        'name'         => 'name',
        'partition'    => 'partition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->dataSource) {
            $res['dataSource'] = $this->dataSource;
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

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['dataSource'])) {
            $model->dataSource = $map['dataSource'];
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
