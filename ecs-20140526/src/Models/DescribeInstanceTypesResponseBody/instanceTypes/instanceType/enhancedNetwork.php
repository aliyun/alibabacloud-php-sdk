<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType;

use AlibabaCloud\Dara\Model;

class enhancedNetwork extends Model
{
    /**
     * @var bool
     */
    public $rssSupport;
    /**
     * @var bool
     */
    public $sriovSupport;
    /**
     * @var int
     */
    public $vfQueueNumberPerEni;
    protected $_name = [
        'rssSupport'          => 'RssSupport',
        'sriovSupport'        => 'SriovSupport',
        'vfQueueNumberPerEni' => 'VfQueueNumberPerEni',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rssSupport) {
            $res['RssSupport'] = $this->rssSupport;
        }

        if (null !== $this->sriovSupport) {
            $res['SriovSupport'] = $this->sriovSupport;
        }

        if (null !== $this->vfQueueNumberPerEni) {
            $res['VfQueueNumberPerEni'] = $this->vfQueueNumberPerEni;
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
        if (isset($map['RssSupport'])) {
            $model->rssSupport = $map['RssSupport'];
        }

        if (isset($map['SriovSupport'])) {
            $model->sriovSupport = $map['SriovSupport'];
        }

        if (isset($map['VfQueueNumberPerEni'])) {
            $model->vfQueueNumberPerEni = $map['VfQueueNumberPerEni'];
        }

        return $model;
    }
}
