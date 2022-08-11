<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\DNSOption;

class CustomDNS extends Model {
    protected $_name = [
        'dnsOptions' => 'dnsOptions',
        'nameServers' => 'nameServers',
        'searches' => 'searches',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->dnsOptions) {
            $res['dnsOptions'] = [];
            if(null !== $this->dnsOptions && is_array($this->dnsOptions)){
                $n = 0;
                foreach($this->dnsOptions as $item){
                    $res['dnsOptions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nameServers) {
            $res['nameServers'] = $this->nameServers;
        }
        if (null !== $this->searches) {
            $res['searches'] = $this->searches;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CustomDNS
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['dnsOptions'])){
            if(!empty($map['dnsOptions'])){
                $model->dnsOptions = [];
                $n = 0;
                foreach($map['dnsOptions'] as $item) {
                    $model->dnsOptions[$n++] = null !== $item ? DNSOption::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['nameServers'])){
            if(!empty($map['nameServers'])){
                $model->nameServers = $map['nameServers'];
            }
        }
        if(isset($map['searches'])){
            if(!empty($map['searches'])){
                $model->searches = $map['searches'];
            }
        }
        return $model;
    }
    /**
     * @var DNSOption[]
     */
    public $dnsOptions;

    /**
     * @var string[]
     */
    public $nameServers;

    /**
     * @var string[]
     */
    public $searches;

}
