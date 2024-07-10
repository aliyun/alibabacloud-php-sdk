<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class DescribeWebAppStaticsOutput extends Model
{
    /**
     * @var int
     */
    public $length;

    /**
     * @var WebStaticsInfo[]
     */
    public $webAppStatics;
    protected $_name = [
        'length'        => 'Length',
        'webAppStatics' => 'WebAppStatics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }
        if (null !== $this->webAppStatics) {
            $res['WebAppStatics'] = [];
            if (null !== $this->webAppStatics && \is_array($this->webAppStatics)) {
                $n = 0;
                foreach ($this->webAppStatics as $item) {
                    $res['WebAppStatics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWebAppStaticsOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }
        if (isset($map['WebAppStatics'])) {
            if (!empty($map['WebAppStatics'])) {
                $model->webAppStatics = [];
                $n                    = 0;
                foreach ($map['WebAppStatics'] as $item) {
                    $model->webAppStatics[$n++] = null !== $item ? WebStaticsInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
