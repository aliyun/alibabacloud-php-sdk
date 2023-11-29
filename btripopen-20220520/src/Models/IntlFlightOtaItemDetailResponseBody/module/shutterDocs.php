<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaItemDetailResponseBody\module;

use AlibabaCloud\Tea\Model;

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
        'contents'  => 'contents',
        'mainTitle' => 'main_title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contents) {
            $res['contents'] = $this->contents;
        }
        if (null !== $this->mainTitle) {
            $res['main_title'] = $this->mainTitle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return shutterDocs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['contents'])) {
            if (!empty($map['contents'])) {
                $model->contents = $map['contents'];
            }
        }
        if (isset($map['main_title'])) {
            $model->mainTitle = $map['main_title'];
        }

        return $model;
    }
}
