<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListRemoteADBDataSourcesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListRemoteADBDataSourcesResponseBody\dataSourceItems\remoteDataSources;

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
        if (\is_array($this->remoteDataSources)) {
            Model::validateArray($this->remoteDataSources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->remoteDataSources) {
            if (\is_array($this->remoteDataSources)) {
                $res['RemoteDataSources'] = [];
                $n1 = 0;
                foreach ($this->remoteDataSources as $item1) {
                    $res['RemoteDataSources'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RemoteDataSources'])) {
            if (!empty($map['RemoteDataSources'])) {
                $model->remoteDataSources = [];
                $n1 = 0;
                foreach ($map['RemoteDataSources'] as $item1) {
                    $model->remoteDataSources[$n1++] = remoteDataSources::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
