<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class RecycleBinConfig extends Model
{
    /**
     * @var bool
     */
    public $autoDeleteEnabled;

    /**
     * @var int
     */
    public $autoDeleteKeepSecond;

    /**
     * @var bool
     */
    public $deleteTrashNormalFileDisabled;
    protected $_name = [
        'autoDeleteEnabled'             => 'auto_delete_enabled',
        'autoDeleteKeepSecond'          => 'auto_delete_keep_second',
        'deleteTrashNormalFileDisabled' => 'delete_trash_normal_file_disabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoDeleteEnabled) {
            $res['auto_delete_enabled'] = $this->autoDeleteEnabled;
        }
        if (null !== $this->autoDeleteKeepSecond) {
            $res['auto_delete_keep_second'] = $this->autoDeleteKeepSecond;
        }
        if (null !== $this->deleteTrashNormalFileDisabled) {
            $res['delete_trash_normal_file_disabled'] = $this->deleteTrashNormalFileDisabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecycleBinConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auto_delete_enabled'])) {
            $model->autoDeleteEnabled = $map['auto_delete_enabled'];
        }
        if (isset($map['auto_delete_keep_second'])) {
            $model->autoDeleteKeepSecond = $map['auto_delete_keep_second'];
        }
        if (isset($map['delete_trash_normal_file_disabled'])) {
            $model->deleteTrashNormalFileDisabled = $map['delete_trash_normal_file_disabled'];
        }

        return $model;
    }
}
