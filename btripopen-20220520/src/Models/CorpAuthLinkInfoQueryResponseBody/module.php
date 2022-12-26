<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\CorpAuthLinkInfoQueryResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CorpAuthLinkInfoQueryResponseBody\module\linkCorps;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CorpAuthLinkInfoQueryResponseBody\module\orgCorp;
use AlibabaCloud\Tea\Model;

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
        'orgCorp'   => 'org_corp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->linkCorps) {
            $res['link_corps'] = [];
            if (null !== $this->linkCorps && \is_array($this->linkCorps)) {
                $n = 0;
                foreach ($this->linkCorps as $item) {
                    $res['link_corps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->orgCorp) {
            $res['org_corp'] = null !== $this->orgCorp ? $this->orgCorp->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['link_corps'])) {
            if (!empty($map['link_corps'])) {
                $model->linkCorps = [];
                $n                = 0;
                foreach ($map['link_corps'] as $item) {
                    $model->linkCorps[$n++] = null !== $item ? linkCorps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['org_corp'])) {
            $model->orgCorp = orgCorp::fromMap($map['org_corp']);
        }

        return $model;
    }
}
