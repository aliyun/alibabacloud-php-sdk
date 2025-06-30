<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaItemDetailResponseBody\module;

use AlibabaCloud\Dara\Model;

class shutterDocs extends Model
{
    /**
     * @var string[]
     */
    public $contents;

    /**
     * @var string
     */
    public $mainTitle;
    protected $_name = [
        'contents' => 'contents',
        'mainTitle' => 'main_title',
    ];

    public function validate()
    {
        if (\is_array($this->contents)) {
            Model::validateArray($this->contents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contents) {
            if (\is_array($this->contents)) {
                $res['contents'] = [];
                $n1 = 0;
                foreach ($this->contents as $item1) {
                    $res['contents'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mainTitle) {
            $res['main_title'] = $this->mainTitle;
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
        if (isset($map['contents'])) {
            if (!empty($map['contents'])) {
                $model->contents = [];
                $n1 = 0;
                foreach ($map['contents'] as $item1) {
                    $model->contents[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['main_title'])) {
            $model->mainTitle = $map['main_title'];
        }

        return $model;
    }
}
