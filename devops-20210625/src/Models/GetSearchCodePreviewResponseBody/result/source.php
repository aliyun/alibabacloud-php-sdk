<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetSearchCodePreviewResponseBody\result;

use AlibabaCloud\Dara\Model;

class source extends Model
{
    /**
     * @var string
     */
    public $branch;
    /**
     * @var string
     */
    public $checkinDate;
    /**
     * @var string
     */
    public $fileName;
    /**
     * @var string
     */
    public $filePath;
    /**
     * @var string
     */
    public $language;
    /**
     * @var string
     */
    public $organizationId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
