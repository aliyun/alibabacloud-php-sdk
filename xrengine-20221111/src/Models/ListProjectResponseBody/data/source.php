<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20221111\Models\ListProjectResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListProjectResponseBody\data\source\clothes;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListProjectResponseBody\data\source\files;

class source extends Model
{
    /**
     * @var clothes[]
     */
    public $clothes;

    /**
     * @var files[]
     */
    public $files;

    /**
     * @var string
     */
    public $ossKey;
    protected $_name = [
        'clothes' => 'Clothes',
        'files' => 'Files',
        'ossKey' => 'OssKey',
    ];

    public function validate()
    {
        if (\is_array($this->clothes)) {
            Model::validateArray($this->clothes);
        }
        if (\is_array($this->files)) {
            Model::validateArray($this->files);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clothes) {
            if (\is_array($this->clothes)) {
                $res['Clothes'] = [];
                $n1 = 0;
                foreach ($this->clothes as $item1) {
                    $res['Clothes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->files) {
            if (\is_array($this->files)) {
                $res['Files'] = [];
                $n1 = 0;
                foreach ($this->files as $item1) {
                    $res['Files'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
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
        if (isset($map['Clothes'])) {
            if (!empty($map['Clothes'])) {
                $model->clothes = [];
                $n1 = 0;
                foreach ($map['Clothes'] as $item1) {
                    $model->clothes[$n1] = clothes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Files'])) {
            if (!empty($map['Files'])) {
                $model->files = [];
                $n1 = 0;
                foreach ($map['Files'] as $item1) {
                    $model->files[$n1] = files::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }

        return $model;
    }
}
