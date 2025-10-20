<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class FunctionDefinition extends Model
{
    /**
     * @var string
     */
    public $className;

    /**
     * @var string
     */
    public $definition;

    /**
     * @var FunctionFileResource[]
     */
    public $fileResources;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'className' => 'className',
        'definition' => 'definition',
        'fileResources' => 'fileResources',
        'functionName' => 'functionName',
        'language' => 'language',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->fileResources)) {
            Model::validateArray($this->fileResources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->className) {
            $res['className'] = $this->className;
        }

        if (null !== $this->definition) {
            $res['definition'] = $this->definition;
        }

        if (null !== $this->fileResources) {
            if (\is_array($this->fileResources)) {
                $res['fileResources'] = [];
                $n1 = 0;
                foreach ($this->fileResources as $item1) {
                    $res['fileResources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->functionName) {
            $res['functionName'] = $this->functionName;
        }

        if (null !== $this->language) {
            $res['language'] = $this->language;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['className'])) {
            $model->className = $map['className'];
        }

        if (isset($map['definition'])) {
            $model->definition = $map['definition'];
        }

        if (isset($map['fileResources'])) {
            if (!empty($map['fileResources'])) {
                $model->fileResources = [];
                $n1 = 0;
                foreach ($map['fileResources'] as $item1) {
                    $model->fileResources[$n1] = FunctionFileResource::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['functionName'])) {
            $model->functionName = $map['functionName'];
        }

        if (isset($map['language'])) {
            $model->language = $map['language'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
