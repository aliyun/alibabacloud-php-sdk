<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class StartWorkflowRequest extends Model
{
    /**
     * @description bam文件输出名称。
     *
     * @var string
     */
    public $mappingBamOutFilename;

    /**
     * @description bam文件输出路径。
     *
     * @var string
     */
    public $mappingBamOutPath;

    /**
     * @description 存放mapping的bucket名称。
     *
     * @var string
     */
    public $mappingBucketName;

    /**
     * @description mapping的第一个fastq文件名。
     *
     * @var string
     */
    public $mappingFastqFirstFilename;

    /**
     * @description mapping的fastq文件路径。
     *
     * @var string
     */
    public $mappingFastqPath;

    /**
     * @description mapping的第二个fastq文件名。
     *
     * @var string
     */
    public $mappingFastqSecondFilename;

    /**
     * @description 是否进行dup。
     *
     * @var string
     */
    public $mappingIsMarkDup;

    /**
     * @description mapping oss数据的存放region。
     *
     * @var string
     */
    public $mappingOssRegion;

    /**
     * @description mapping的reference文件位置。
     *
     * @var string
     */
    public $mappingReferencePath;

    /**
     * @description SLA类型，可选值：s、g、p。 白银级（s）：超过90 Gbp的部分，按1.5 Gbp/min计算增加的时间。 黄金级（g）：超过90 Gbp的部分，按2 Gbp/min计算增加的时间。 铂金级（p）：超过90 Gbp的部分，按3 Gbp/min计算增加的时间。
     *
     * @var string
     */
    public $service;

    /**
     * @description 存放wgs的bucket名称。
     *
     * @var string
     */
    public $wgsBucketName;

    /**
     * @description wgs的第一个fastq文件名。
     *
     * @var string
     */
    public $wgsFastqFirstFilename;

    /**
     * @description wgs的fastq文件路径。
     *
     * @var string
     */
    public $wgsFastqPath;

    /**
     * @description wgs的第二个fastq文件名。
     *
     * @var string
     */
    public $wgsFastqSecondFilename;

    /**
     * @description wgs oss数据的存放region。
     *
     * @var string
     */
    public $wgsOssRegion;

    /**
     * @description wgs的reference文件路径。
     *
     * @var string
     */
    public $wgsReferencePath;

    /**
     * @description wgs的vcf输出文件名称。
     *
     * @var string
     */
    public $wgsVcfOutFilename;

    /**
     * @description wgs的vcf输出路径。
     *
     * @var string
     */
    public $wgsVcfOutPath;

    /**
     * @description 工作流类型，可选值：wgs或mapping。
     *
     * @var string
     */
    public $workflowType;
    protected $_name = [
        'mappingBamOutFilename'      => 'mapping_bam_out_filename',
        'mappingBamOutPath'          => 'mapping_bam_out_path',
        'mappingBucketName'          => 'mapping_bucket_name',
        'mappingFastqFirstFilename'  => 'mapping_fastq_first_filename',
        'mappingFastqPath'           => 'mapping_fastq_path',
        'mappingFastqSecondFilename' => 'mapping_fastq_second_filename',
        'mappingIsMarkDup'           => 'mapping_is_mark_dup',
        'mappingOssRegion'           => 'mapping_oss_region',
        'mappingReferencePath'       => 'mapping_reference_path',
        'service'                    => 'service',
        'wgsBucketName'              => 'wgs_bucket_name',
        'wgsFastqFirstFilename'      => 'wgs_fastq_first_filename',
        'wgsFastqPath'               => 'wgs_fastq_path',
        'wgsFastqSecondFilename'     => 'wgs_fastq_second_filename',
        'wgsOssRegion'               => 'wgs_oss_region',
        'wgsReferencePath'           => 'wgs_reference_path',
        'wgsVcfOutFilename'          => 'wgs_vcf_out_filename',
        'wgsVcfOutPath'              => 'wgs_vcf_out_path',
        'workflowType'               => 'workflow_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mappingBamOutFilename) {
            $res['mapping_bam_out_filename'] = $this->mappingBamOutFilename;
        }
        if (null !== $this->mappingBamOutPath) {
            $res['mapping_bam_out_path'] = $this->mappingBamOutPath;
        }
        if (null !== $this->mappingBucketName) {
            $res['mapping_bucket_name'] = $this->mappingBucketName;
        }
        if (null !== $this->mappingFastqFirstFilename) {
            $res['mapping_fastq_first_filename'] = $this->mappingFastqFirstFilename;
        }
        if (null !== $this->mappingFastqPath) {
            $res['mapping_fastq_path'] = $this->mappingFastqPath;
        }
        if (null !== $this->mappingFastqSecondFilename) {
            $res['mapping_fastq_second_filename'] = $this->mappingFastqSecondFilename;
        }
        if (null !== $this->mappingIsMarkDup) {
            $res['mapping_is_mark_dup'] = $this->mappingIsMarkDup;
        }
        if (null !== $this->mappingOssRegion) {
            $res['mapping_oss_region'] = $this->mappingOssRegion;
        }
        if (null !== $this->mappingReferencePath) {
            $res['mapping_reference_path'] = $this->mappingReferencePath;
        }
        if (null !== $this->service) {
            $res['service'] = $this->service;
        }
        if (null !== $this->wgsBucketName) {
            $res['wgs_bucket_name'] = $this->wgsBucketName;
        }
        if (null !== $this->wgsFastqFirstFilename) {
            $res['wgs_fastq_first_filename'] = $this->wgsFastqFirstFilename;
        }
        if (null !== $this->wgsFastqPath) {
            $res['wgs_fastq_path'] = $this->wgsFastqPath;
        }
        if (null !== $this->wgsFastqSecondFilename) {
            $res['wgs_fastq_second_filename'] = $this->wgsFastqSecondFilename;
        }
        if (null !== $this->wgsOssRegion) {
            $res['wgs_oss_region'] = $this->wgsOssRegion;
        }
        if (null !== $this->wgsReferencePath) {
            $res['wgs_reference_path'] = $this->wgsReferencePath;
        }
        if (null !== $this->wgsVcfOutFilename) {
            $res['wgs_vcf_out_filename'] = $this->wgsVcfOutFilename;
        }
        if (null !== $this->wgsVcfOutPath) {
            $res['wgs_vcf_out_path'] = $this->wgsVcfOutPath;
        }
        if (null !== $this->workflowType) {
            $res['workflow_type'] = $this->workflowType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartWorkflowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['mapping_bam_out_filename'])) {
            $model->mappingBamOutFilename = $map['mapping_bam_out_filename'];
        }
        if (isset($map['mapping_bam_out_path'])) {
            $model->mappingBamOutPath = $map['mapping_bam_out_path'];
        }
        if (isset($map['mapping_bucket_name'])) {
            $model->mappingBucketName = $map['mapping_bucket_name'];
        }
        if (isset($map['mapping_fastq_first_filename'])) {
            $model->mappingFastqFirstFilename = $map['mapping_fastq_first_filename'];
        }
        if (isset($map['mapping_fastq_path'])) {
            $model->mappingFastqPath = $map['mapping_fastq_path'];
        }
        if (isset($map['mapping_fastq_second_filename'])) {
            $model->mappingFastqSecondFilename = $map['mapping_fastq_second_filename'];
        }
        if (isset($map['mapping_is_mark_dup'])) {
            $model->mappingIsMarkDup = $map['mapping_is_mark_dup'];
        }
        if (isset($map['mapping_oss_region'])) {
            $model->mappingOssRegion = $map['mapping_oss_region'];
        }
        if (isset($map['mapping_reference_path'])) {
            $model->mappingReferencePath = $map['mapping_reference_path'];
        }
        if (isset($map['service'])) {
            $model->service = $map['service'];
        }
        if (isset($map['wgs_bucket_name'])) {
            $model->wgsBucketName = $map['wgs_bucket_name'];
        }
        if (isset($map['wgs_fastq_first_filename'])) {
            $model->wgsFastqFirstFilename = $map['wgs_fastq_first_filename'];
        }
        if (isset($map['wgs_fastq_path'])) {
            $model->wgsFastqPath = $map['wgs_fastq_path'];
        }
        if (isset($map['wgs_fastq_second_filename'])) {
            $model->wgsFastqSecondFilename = $map['wgs_fastq_second_filename'];
        }
        if (isset($map['wgs_oss_region'])) {
            $model->wgsOssRegion = $map['wgs_oss_region'];
        }
        if (isset($map['wgs_reference_path'])) {
            $model->wgsReferencePath = $map['wgs_reference_path'];
        }
        if (isset($map['wgs_vcf_out_filename'])) {
            $model->wgsVcfOutFilename = $map['wgs_vcf_out_filename'];
        }
        if (isset($map['wgs_vcf_out_path'])) {
            $model->wgsVcfOutPath = $map['wgs_vcf_out_path'];
        }
        if (isset($map['workflow_type'])) {
            $model->workflowType = $map['workflow_type'];
        }

        return $model;
    }
}
