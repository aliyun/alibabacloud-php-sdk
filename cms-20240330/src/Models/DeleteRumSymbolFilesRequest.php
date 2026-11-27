<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class DeleteRumSymbolFilesRequest extends Model
{
    /**
     * @var string[]
     */
    public $filePaths;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'filePaths' => 'filePaths',
        'serviceId' => 'serviceId',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (\is_array($this->filePaths)) {
            Model::validateArray($this->filePaths);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filePaths) {
            if (\is_array($this->filePaths)) {
                $res['filePaths'] = [];
                $n1 = 0;
                foreach ($this->filePaths as $item1) {
                    $res['filePaths'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['filePaths'])) {
            if (!empty($map['filePaths'])) {
                $model->filePaths = [];
                $n1 = 0;
                foreach ($map['filePaths'] as $item1) {
                    $model->filePaths[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
