<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDatasetRequest;

use AlibabaCloud\Dara\Model;

class initVersion extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string[]
     */
    public $importInfo;

    /**
     * @var string
     */
    public $mountPath;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'comment' => 'Comment',
        'importInfo' => 'ImportInfo',
        'mountPath' => 'MountPath',
        'url' => 'Url',
    ];

    public function validate()
    {
        if (\is_array($this->importInfo)) {
            Model::validateArray($this->importInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->importInfo) {
            if (\is_array($this->importInfo)) {
                $res['ImportInfo'] = [];
                foreach ($this->importInfo as $key1 => $value1) {
                    $res['ImportInfo'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['ImportInfo'])) {
            if (!empty($map['ImportInfo'])) {
                $model->importInfo = [];
                foreach ($map['ImportInfo'] as $key1 => $value1) {
                    $model->importInfo[$key1] = $value1;
                }
            }
        }

        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
