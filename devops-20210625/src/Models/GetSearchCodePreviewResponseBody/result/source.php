<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetSearchCodePreviewResponseBody\result;

use AlibabaCloud\Tea\Model;

class source extends Model
{
    /**
     * @example master
     *
     * @var string
     */
    public $branch;

    /**
     * @example 2022-12-12 12:12:12
     *
     * @var string
     */
    public $checkinDate;

    /**
     * @example test.rb
     *
     * @var string
     */
    public $fileName;

    /**
     * @example config/environments/test.rb
     *
     * @var string
     */
    public $filePath;

    /**
     * @example Ruby
     *
     * @var string
     */
    public $language;

    /**
     * @example 5f9f9f6122a8c7ff3934f99a
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example codeup/test-repo
     *
     * @var string
     */
    public $repoPath;
    protected $_name = [
        'branch'         => 'branch',
        'checkinDate'    => 'checkinDate',
        'fileName'       => 'fileName',
        'filePath'       => 'filePath',
        'language'       => 'language',
        'organizationId' => 'organizationId',
        'repoPath'       => 'repoPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->branch) {
            $res['branch'] = $this->branch;
        }
        if (null !== $this->checkinDate) {
            $res['checkinDate'] = $this->checkinDate;
        }
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }
        if (null !== $this->filePath) {
            $res['filePath'] = $this->filePath;
        }
        if (null !== $this->language) {
            $res['language'] = $this->language;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }
        if (null !== $this->repoPath) {
            $res['repoPath'] = $this->repoPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return source
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['branch'])) {
            $model->branch = $map['branch'];
        }
        if (isset($map['checkinDate'])) {
            $model->checkinDate = $map['checkinDate'];
        }
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }
        if (isset($map['filePath'])) {
            $model->filePath = $map['filePath'];
        }
        if (isset($map['language'])) {
            $model->language = $map['language'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }
        if (isset($map['repoPath'])) {
            $model->repoPath = $map['repoPath'];
        }

        return $model;
    }
}
