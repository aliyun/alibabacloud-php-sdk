<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFilesystemsVscAttachInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFilesystemsVscAttachInfoResponseBody\vscAttachInfo\vscAttachInfo;

class vscAttachInfo extends Model
{
    /**
     * @var vscAttachInfo[]
     */
    public $vscAttachInfo;
    protected $_name = [
        'vscAttachInfo' => 'VscAttachInfo',
    ];

    public function validate()
    {
        if (\is_array($this->vscAttachInfo)) {
            Model::validateArray($this->vscAttachInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vscAttachInfo) {
            if (\is_array($this->vscAttachInfo)) {
                $res['VscAttachInfo'] = [];
                $n1 = 0;
                foreach ($this->vscAttachInfo as $item1) {
                    $res['VscAttachInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['VscAttachInfo'])) {
            if (!empty($map['VscAttachInfo'])) {
                $model->vscAttachInfo = [];
                $n1 = 0;
                foreach ($map['VscAttachInfo'] as $item1) {
                    $model->vscAttachInfo[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
