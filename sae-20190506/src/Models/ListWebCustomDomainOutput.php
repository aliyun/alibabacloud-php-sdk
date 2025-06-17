<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class ListWebCustomDomainOutput extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var WebCustomDomain[]
     */
    public $webCustomDomains;
    protected $_name = [
        'nextToken' => 'NextToken',
        'webCustomDomains' => 'WebCustomDomains',
    ];

    public function validate()
    {
        if (\is_array($this->webCustomDomains)) {
            Model::validateArray($this->webCustomDomains);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->webCustomDomains) {
            if (\is_array($this->webCustomDomains)) {
                $res['WebCustomDomains'] = [];
                $n1 = 0;
                foreach ($this->webCustomDomains as $item1) {
                    $res['WebCustomDomains'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['WebCustomDomains'])) {
            if (!empty($map['WebCustomDomains'])) {
                $model->webCustomDomains = [];
                $n1 = 0;
                foreach ($map['WebCustomDomains'] as $item1) {
                    $model->webCustomDomains[$n1] = WebCustomDomain::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
