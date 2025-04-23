<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListImagesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListImagesResponseBody\osTags\osInfo;

class osTags extends Model
{
    /**
     * @var osInfo[]
     */
    public $osInfo;
    protected $_name = [
        'osInfo' => 'OsInfo',
    ];

    public function validate()
    {
        if (\is_array($this->osInfo)) {
            Model::validateArray($this->osInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->osInfo) {
            if (\is_array($this->osInfo)) {
                $res['OsInfo'] = [];
                $n1 = 0;
                foreach ($this->osInfo as $item1) {
                    $res['OsInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['OsInfo'])) {
            if (!empty($map['OsInfo'])) {
                $model->osInfo = [];
                $n1 = 0;
                foreach ($map['OsInfo'] as $item1) {
                    $model->osInfo[$n1++] = osInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
