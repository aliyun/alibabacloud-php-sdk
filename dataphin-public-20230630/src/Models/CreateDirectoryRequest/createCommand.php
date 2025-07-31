<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDirectoryRequest;

use AlibabaCloud\Tea\Model;

class createCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example tempCode
     *
     * @var string
     */
    public $category;

    /**
     * @description This parameter is required.
     *
     * @example /
     *
     * @var string
     */
    public $directory;

    /**
     * @description This parameter is required.
     *
     * @example test_xx
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example 1212344
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'category' => 'Category',
        'directory' => 'Directory',
        'name' => 'Name',
        'projectId' => 'ProjectId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->directory) {
            $res['Directory'] = $this->directory;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Directory'])) {
            $model->directory = $map['Directory'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
