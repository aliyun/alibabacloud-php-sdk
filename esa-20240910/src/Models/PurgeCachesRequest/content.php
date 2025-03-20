<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\PurgeCachesRequest;

use AlibabaCloud\SDK\ESA\V20240910\Models\PurgeCachesRequest\content\cacheKeys;
use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description List of cachekeys to be refreshed, required when the type is cachekey.
     *
     * @var cacheKeys[]
     */
    public $cacheKeys;

    /**
     * @description List of cachetags to be refreshed, required when the type is cachetag.
     *
     * @var string[]
     */
    public $cacheTags;

    /**
     * @description List of directories to be refreshed, required when the type is directory.
     *
     * @var string[]
     */
    public $directories;

    /**
     * @description List of files to be refreshed, required when the type is file.
     *
     * @var mixed[]
     */
    public $files;

    /**
     * @description List of hostnames to be refreshed, required when the type is hostname.
     *
     * @var string[]
     */
    public $hostnames;

    /**
     * @description List of files with ignored parameters, required when the type is ignoreParams.
     *
     * @var string[]
     */
    public $ignoreParams;

    /**
     * @description Flag for purging all content. Default is false, set to true when the type is purgeall.
     *
     * @example true
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheKeys) {
            $res['CacheKeys'] = [];
            if (null !== $this->cacheKeys && \is_array($this->cacheKeys)) {
                $n = 0;
                foreach ($this->cacheKeys as $item) {
                    $res['CacheKeys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cacheTags) {
            $res['CacheTags'] = $this->cacheTags;
        }
        if (null !== $this->directories) {
            $res['Directories'] = $this->directories;
        }
        if (null !== $this->files) {
            $res['Files'] = $this->files;
        }
        if (null !== $this->hostnames) {
            $res['Hostnames'] = $this->hostnames;
        }
        if (null !== $this->ignoreParams) {
            $res['IgnoreParams'] = $this->ignoreParams;
        }
        if (null !== $this->purgeAll) {
            $res['PurgeAll'] = $this->purgeAll;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CacheKeys'])) {
            if (!empty($map['CacheKeys'])) {
                $model->cacheKeys = [];
                $n = 0;
                foreach ($map['CacheKeys'] as $item) {
                    $model->cacheKeys[$n++] = null !== $item ? cacheKeys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CacheTags'])) {
            if (!empty($map['CacheTags'])) {
                $model->cacheTags = $map['CacheTags'];
            }
        }
        if (isset($map['Directories'])) {
            if (!empty($map['Directories'])) {
                $model->directories = $map['Directories'];
            }
        }
        if (isset($map['Files'])) {
            if (!empty($map['Files'])) {
                $model->files = $map['Files'];
            }
        }
        if (isset($map['Hostnames'])) {
            if (!empty($map['Hostnames'])) {
                $model->hostnames = $map['Hostnames'];
            }
        }
        if (isset($map['IgnoreParams'])) {
            if (!empty($map['IgnoreParams'])) {
                $model->ignoreParams = $map['IgnoreParams'];
            }
        }
        if (isset($map['PurgeAll'])) {
            $model->purgeAll = $map['PurgeAll'];
        }

        return $model;
    }
}
