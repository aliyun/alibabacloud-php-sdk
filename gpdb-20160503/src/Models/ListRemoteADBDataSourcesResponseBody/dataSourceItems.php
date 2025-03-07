<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListRemoteADBDataSourcesResponseBody;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListRemoteADBDataSourcesResponseBody\dataSourceItems\remoteDataSources;
use AlibabaCloud\Tea\Model;

class dataSourceItems extends Model
{
    /**
     * @var remoteDataSources[]
     */
    public $remoteDataSources;
    protected $_name = [
        'remoteDataSources' => 'RemoteDataSources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remoteDataSources) {
            $res['RemoteDataSources'] = [];
            if (null !== $this->remoteDataSources && \is_array($this->remoteDataSources)) {
                $n = 0;
                foreach ($this->remoteDataSources as $item) {
                    $res['RemoteDataSources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSourceItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RemoteDataSources'])) {
            if (!empty($map['RemoteDataSources'])) {
                $model->remoteDataSources = [];
                $n                        = 0;
                foreach ($map['RemoteDataSources'] as $item) {
                    $model->remoteDataSources[$n++] = null !== $item ? remoteDataSources::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
