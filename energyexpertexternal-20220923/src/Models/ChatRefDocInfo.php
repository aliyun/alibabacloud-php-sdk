<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;

class ChatRefDocInfo extends Model
{
    /**
     * @var ChatRefDocPageInfo[]
     */
    public $pageListInfo;

    /**
     * @var int
     */
    public $pages;
    protected $_name = [
        'pageListInfo' => 'pageListInfo',
        'pages' => 'pages',
    ];

    public function validate()
    {
        if (\is_array($this->pageListInfo)) {
            Model::validateArray($this->pageListInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageListInfo) {
            if (\is_array($this->pageListInfo)) {
                $res['pageListInfo'] = [];
                $n1 = 0;
                foreach ($this->pageListInfo as $item1) {
                    $res['pageListInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pages) {
            $res['pages'] = $this->pages;
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
        if (isset($map['pageListInfo'])) {
            if (!empty($map['pageListInfo'])) {
                $model->pageListInfo = [];
                $n1 = 0;
                foreach ($map['pageListInfo'] as $item1) {
                    $model->pageListInfo[$n1] = ChatRefDocPageInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['pages'])) {
            $model->pages = $map['pages'];
        }

        return $model;
    }
}
