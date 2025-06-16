<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\PurgeCachesRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\PurgeCachesRequest\content\cacheKeys;

class content extends Model
{
    /**
     * @var cacheKeys[]
     */
    public $cacheKeys;

    /**
     * @var string[]
     */
    public $cacheTags;

    /**
     * @var string[]
     */
    public $directories;

    /**
     * @var mixed[]
     */
    public $files;

    /**
     * @var string[]
     */
    public $hostnames;

    /**
     * @var string[]
     */
    public $ignoreParams;

    /**
     * @var bool
     */
    public $purgeAll;
    protected $_name = [
        'cacheKeys' => 'CacheKeys',
        'cacheTags' => 'CacheTags',
        'directories' => 'Directories',
        'files' => 'Files',
        'hostnames' => 'Hostnames',
        'ignoreParams' => 'IgnoreParams',
        'purgeAll' => 'PurgeAll',
    ];

    public function validate()
    {
        if (\is_array($this->cacheKeys)) {
            Model::validateArray($this->cacheKeys);
        }
        if (\is_array($this->cacheTags)) {
            Model::validateArray($this->cacheTags);
        }
        if (\is_array($this->directories)) {
            Model::validateArray($this->directories);
        }
        if (\is_array($this->files)) {
            Model::validateArray($this->files);
        }
        if (\is_array($this->hostnames)) {
            Model::validateArray($this->hostnames);
        }
        if (\is_array($this->ignoreParams)) {
            Model::validateArray($this->ignoreParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cacheKeys) {
            if (\is_array($this->cacheKeys)) {
                $res['CacheKeys'] = [];
                $n1 = 0;
                foreach ($this->cacheKeys as $item1) {
                    $res['CacheKeys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cacheTags) {
            if (\is_array($this->cacheTags)) {
                $res['CacheTags'] = [];
                $n1 = 0;
                foreach ($this->cacheTags as $item1) {
                    $res['CacheTags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->directories) {
            if (\is_array($this->directories)) {
                $res['Directories'] = [];
                $n1 = 0;
                foreach ($this->directories as $item1) {
                    $res['Directories'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->files) {
            if (\is_array($this->files)) {
                $res['Files'] = [];
                $n1 = 0;
                foreach ($this->files as $item1) {
                    $res['Files'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hostnames) {
            if (\is_array($this->hostnames)) {
                $res['Hostnames'] = [];
                $n1 = 0;
                foreach ($this->hostnames as $item1) {
                    $res['Hostnames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ignoreParams) {
            if (\is_array($this->ignoreParams)) {
                $res['IgnoreParams'] = [];
                $n1 = 0;
                foreach ($this->ignoreParams as $item1) {
                    $res['IgnoreParams'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->purgeAll) {
            $res['PurgeAll'] = $this->purgeAll;
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
        if (isset($map['CacheKeys'])) {
            if (!empty($map['CacheKeys'])) {
                $model->cacheKeys = [];
                $n1 = 0;
                foreach ($map['CacheKeys'] as $item1) {
                    $model->cacheKeys[$n1] = cacheKeys::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CacheTags'])) {
            if (!empty($map['CacheTags'])) {
                $model->cacheTags = [];
                $n1 = 0;
                foreach ($map['CacheTags'] as $item1) {
                    $model->cacheTags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Directories'])) {
            if (!empty($map['Directories'])) {
                $model->directories = [];
                $n1 = 0;
                foreach ($map['Directories'] as $item1) {
                    $model->directories[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Files'])) {
            if (!empty($map['Files'])) {
                $model->files = [];
                $n1 = 0;
                foreach ($map['Files'] as $item1) {
                    $model->files[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Hostnames'])) {
            if (!empty($map['Hostnames'])) {
                $model->hostnames = [];
                $n1 = 0;
                foreach ($map['Hostnames'] as $item1) {
                    $model->hostnames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IgnoreParams'])) {
            if (!empty($map['IgnoreParams'])) {
                $model->ignoreParams = [];
                $n1 = 0;
                foreach ($map['IgnoreParams'] as $item1) {
                    $model->ignoreParams[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PurgeAll'])) {
            $model->purgeAll = $map['PurgeAll'];
        }

        return $model;
    }
}
