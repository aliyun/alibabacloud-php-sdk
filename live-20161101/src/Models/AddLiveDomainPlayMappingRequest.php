<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddLiveDomainPlayMappingRequest extends Model
{
    /**
     * @var string
     */
    public $playDomain;

    /**
     * @var string
     */
    public $pullDomain;
    protected $_name = [
        'playDomain' => 'PlayDomain',
        'pullDomain' => 'PullDomain',
    ];

    public function validate()
    {
        Model::validateRequired('playDomain', $this->playDomain, true);
        Model::validateRequired('pullDomain', $this->pullDomain, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->playDomain) {
            $res['PlayDomain'] = $this->playDomain;
        }
        if (null !== $this->pullDomain) {
            $res['PullDomain'] = $this->pullDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddLiveDomainPlayMappingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlayDomain'])) {
            $model->playDomain = $map['PlayDomain'];
        }
        if (isset($map['PullDomain'])) {
            $model->pullDomain = $map['PullDomain'];
        }

        return $model;
    }
}
