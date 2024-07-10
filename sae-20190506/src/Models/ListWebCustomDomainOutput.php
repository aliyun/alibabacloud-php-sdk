<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

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
        'nextToken'        => 'NextToken',
        'webCustomDomains' => 'WebCustomDomains',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->webCustomDomains) {
            $res['WebCustomDomains'] = [];
            if (null !== $this->webCustomDomains && \is_array($this->webCustomDomains)) {
                $n = 0;
                foreach ($this->webCustomDomains as $item) {
                    $res['WebCustomDomains'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWebCustomDomainOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['WebCustomDomains'])) {
            if (!empty($map['WebCustomDomains'])) {
                $model->webCustomDomains = [];
                $n                       = 0;
                foreach ($map['WebCustomDomains'] as $item) {
                    $model->webCustomDomains[$n++] = null !== $item ? WebCustomDomain::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
