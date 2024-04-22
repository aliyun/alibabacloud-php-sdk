<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsResponseBody\cluster\clusterInfo;

use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsResponseBody\cluster\clusterInfo\metaData\ACKOne;
use AlibabaCloud\Tea\Model;

class metaData extends Model
{
    /**
     * @description The cluster metadata.
     *
     * @var ACKOne
     */
    public $ACKOne;
    protected $_name = [
        'ACKOne' => 'ACKOne',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ACKOne) {
            $res['ACKOne'] = null !== $this->ACKOne ? $this->ACKOne->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metaData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ACKOne'])) {
            $model->ACKOne = ACKOne::fromMap($map['ACKOne']);
        }

        return $model;
    }
}
