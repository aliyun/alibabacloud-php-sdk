<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListCustomDomainsResponseBody\customDomains;

class ListCustomDomainsResponseBody extends Model {
    protected $_name = [
        'customDomains' => 'customDomains',
        'nextToken' => 'nextToken',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->customDomains) {
            $res['customDomains'] = [];
            if(null !== $this->customDomains && is_array($this->customDomains)){
                $n = 0;
                foreach($this->customDomains as $item){
                    $res['customDomains'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListCustomDomainsResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['customDomains'])){
            if(!empty($map['customDomains'])){
                $model->customDomains = [];
                $n = 0;
                foreach($map['customDomains'] as $item) {
                    $model->customDomains[$n++] = null !== $item ? customDomains::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['nextToken'])){
            $model->nextToken = $map['nextToken'];
        }
        return $model;
    }
    /**
     * @var customDomains[]
     */
    public $customDomains;

    /**
     * @var string
     */
    public $nextToken;

}
