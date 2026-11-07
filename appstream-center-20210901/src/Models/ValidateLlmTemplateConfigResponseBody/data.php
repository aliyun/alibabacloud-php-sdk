<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ValidateLlmTemplateConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ValidateLlmTemplateConfigResponseBody\data\validationErrors;

class data extends Model
{
    /**
     * @var bool
     */
    public $valid;

    /**
     * @var validationErrors[]
     */
    public $validationErrors;
    protected $_name = [
        'valid' => 'Valid',
        'validationErrors' => 'ValidationErrors',
    ];

    public function validate()
    {
        if (\is_array($this->validationErrors)) {
            Model::validateArray($this->validationErrors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->valid) {
            $res['Valid'] = $this->valid;
        }

        if (null !== $this->validationErrors) {
            if (\is_array($this->validationErrors)) {
                $res['ValidationErrors'] = [];
                $n1 = 0;
                foreach ($this->validationErrors as $item1) {
                    $res['ValidationErrors'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Valid'])) {
            $model->valid = $map['Valid'];
        }

        if (isset($map['ValidationErrors'])) {
            if (!empty($map['ValidationErrors'])) {
                $model->validationErrors = [];
                $n1 = 0;
                foreach ($map['ValidationErrors'] as $item1) {
                    $model->validationErrors[$n1] = validationErrors::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
