<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DocumentChapterSummary extends Model
{
    /**
     * @var ChapterSummary[]
     */
    public $data;

    /**
     * @var int
     */
    public $nextMarker;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'data' => 'Data',
        'nextMarker' => 'NextMarker',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['Data'] = [];
                $n1 = 0;
                foreach ($this->data as $item1) {
                    $res['Data'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextMarker) {
            $res['NextMarker'] = $this->nextMarker;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n1 = 0;
                foreach ($map['Data'] as $item1) {
                    $model->data[$n1] = ChapterSummary::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NextMarker'])) {
            $model->nextMarker = $map['NextMarker'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
