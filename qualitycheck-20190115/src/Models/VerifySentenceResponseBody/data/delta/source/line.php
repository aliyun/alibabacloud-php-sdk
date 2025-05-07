<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\VerifySentenceResponseBody\data\delta\source;

use AlibabaCloud\Dara\Model;

class line extends Model
{
    /**
     * @var string[]
     */
    public $line;
    protected $_name = [
        'line' => 'Line',
    ];

    public function validate()
    {
        if (\is_array($this->line)) {
            Model::validateArray($this->line);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->line) {
            if (\is_array($this->line)) {
                $res['Line'] = [];
                $n1 = 0;
                foreach ($this->line as $item1) {
                    $res['Line'][$n1++] = $item1;
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
        if (isset($map['Line'])) {
            if (!empty($map['Line'])) {
                $model->line = [];
                $n1 = 0;
                foreach ($map['Line'] as $item1) {
                    $model->line[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
