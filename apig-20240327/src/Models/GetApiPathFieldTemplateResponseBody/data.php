<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetApiPathFieldTemplateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\DataFieldPathsValue;

class data extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var DataFieldPathsValue[][]
     */
    public $fieldPaths;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'description' => 'description',
        'fieldPaths' => 'fieldPaths',
        'path' => 'path',
        'protocol' => 'protocol',
        'templateName' => 'templateName',
    ];

    public function validate()
    {
        if (\is_array($this->fieldPaths)) {
            Model::validateArray($this->fieldPaths);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->fieldPaths) {
            if (\is_array($this->fieldPaths)) {
                $res['fieldPaths'] = [];
                foreach ($this->fieldPaths as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['fieldPaths'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['fieldPaths'][$key1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }

        if (null !== $this->templateName) {
            $res['templateName'] = $this->templateName;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['fieldPaths'])) {
            if (!empty($map['fieldPaths'])) {
                $model->fieldPaths = [];
                foreach ($map['fieldPaths'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->fieldPaths[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->fieldPaths[$key1][$n2] = DataFieldPathsValue::fromMap($item2);
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        if (isset($map['templateName'])) {
            $model->templateName = $map['templateName'];
        }

        return $model;
    }
}
