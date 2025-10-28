<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceConsumersPageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceConsumersPageResponseBody\data\content;

class data extends Model
{
    /**
     * @var content[]
     */
    public $content;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $totalElements;

    /**
     * @var int
     */
    public $totalPages;
    protected $_name = [
        'content' => 'Content',
        'size' => 'Size',
        'totalElements' => 'TotalElements',
        'totalPages' => 'TotalPages',
    ];

    public function validate()
    {
        if (\is_array($this->content)) {
            Model::validateArray($this->content);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            if (\is_array($this->content)) {
                $res['Content'] = [];
                $n1 = 0;
                foreach ($this->content as $item1) {
                    $res['Content'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->totalElements) {
            $res['TotalElements'] = $this->totalElements;
        }

        if (null !== $this->totalPages) {
            $res['TotalPages'] = $this->totalPages;
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
        if (isset($map['Content'])) {
            if (!empty($map['Content'])) {
                $model->content = [];
                $n1 = 0;
                foreach ($map['Content'] as $item1) {
                    $model->content[$n1] = content::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['TotalElements'])) {
            $model->totalElements = $map['TotalElements'];
        }

        if (isset($map['TotalPages'])) {
            $model->totalPages = $map['TotalPages'];
        }

        return $model;
    }
}
