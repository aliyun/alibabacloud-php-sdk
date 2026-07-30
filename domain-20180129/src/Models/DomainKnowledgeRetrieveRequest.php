<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;

class DomainKnowledgeRetrieveRequest extends Model
{
    /**
     * @var int
     */
    public $globalTopN;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $site;
    protected $_name = [
        'globalTopN' => 'GlobalTopN',
        'keyword' => 'Keyword',
        'site' => 'Site',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->globalTopN) {
            $res['GlobalTopN'] = $this->globalTopN;
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->site) {
            $res['Site'] = $this->site;
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
        if (isset($map['GlobalTopN'])) {
            $model->globalTopN = $map['GlobalTopN'];
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['Site'])) {
            $model->site = $map['Site'];
        }

        return $model;
    }
}
