<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigResponseBody\emrMainVersionList\emrMainVersion;
use AlibabaCloud\Tea\Model;

class emrMainVersionList extends Model
{
    /**
     * @var emrMainVersion[]
     */
    public $emrMainVersion;
    protected $_name = [
        'emrMainVersion' => 'EmrMainVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->emrMainVersion) {
            $res['EmrMainVersion'] = [];
            if (null !== $this->emrMainVersion && \is_array($this->emrMainVersion)) {
                $n = 0;
                foreach ($this->emrMainVersion as $item) {
                    $res['EmrMainVersion'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return emrMainVersionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EmrMainVersion'])) {
            if (!empty($map['EmrMainVersion'])) {
                $model->emrMainVersion = [];
                $n                     = 0;
                foreach ($map['EmrMainVersion'] as $item) {
                    $model->emrMainVersion[$n++] = null !== $item ? emrMainVersion::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
