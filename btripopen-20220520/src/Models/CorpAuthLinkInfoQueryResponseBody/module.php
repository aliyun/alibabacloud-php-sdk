<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\CorpAuthLinkInfoQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CorpAuthLinkInfoQueryResponseBody\module\linkCorps;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CorpAuthLinkInfoQueryResponseBody\module\orgCorp;

class module extends Model
{
    /**
     * @var linkCorps[]
     */
    public $linkCorps;

    /**
     * @var orgCorp
     */
    public $orgCorp;
    protected $_name = [
        'linkCorps' => 'link_corps',
        'orgCorp' => 'org_corp',
    ];

    public function validate()
    {
        if (\is_array($this->linkCorps)) {
            Model::validateArray($this->linkCorps);
        }
        if (null !== $this->orgCorp) {
            $this->orgCorp->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->linkCorps) {
            if (\is_array($this->linkCorps)) {
                $res['link_corps'] = [];
                $n1 = 0;
                foreach ($this->linkCorps as $item1) {
                    $res['link_corps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->orgCorp) {
            $res['org_corp'] = null !== $this->orgCorp ? $this->orgCorp->toArray($noStream) : $this->orgCorp;
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
        if (isset($map['link_corps'])) {
            if (!empty($map['link_corps'])) {
                $model->linkCorps = [];
                $n1 = 0;
                foreach ($map['link_corps'] as $item1) {
                    $model->linkCorps[$n1] = linkCorps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['org_corp'])) {
            $model->orgCorp = orgCorp::fromMap($map['org_corp']);
        }

        return $model;
    }
}
